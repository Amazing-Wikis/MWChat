<?php

class SpecialCreateInviteOnlyChannel extends SpecialPage {
	public function __construct( $name = '', $restriction = '', $listed = true ) {
		parent::__construct( 'mwc-create-invite-only-channel', '' );
	}

	public function showCancel( $show = true ) {
		$this->mShowCancel = $show;
		return $this;
	}
	public function setCancelTarget( $target ) {
		$this->mCancelTarget = $target;
		return $this;
	}


	public function execute( $par ) {
		$this->getOutput()->setPageTitle( 'Create Invite Only Channel' );

		$formDescriptor = [
			'mwc-channel-name' => [
				'class' => 'HTMLTextField',
				'label-message' => 'mwc-channel-name',
				'required' => true,
			],
			'mwc-creating-user' => [
				'type' => 'url',
				'label-message' => 'mwc-creating-user',
				'required' => true,
			],
			'mwc-invite-new-user' => [
				'type' => 'user',
				'required' => true,
				'label-message' => 'mwc-invite-user',
				'validation-callback' => function ( $val ) {
					// only pass strings to User::newFromName
					if ( !is_string( $val ) ) {
						return true;
					}

					$key = $this->validateNewUser( $val );
					if ( is_string( $key ) ) {
						return $this->msg( $key )->escaped();
					}
					return true;
				},
			],


		];		
		$htmlForm = HTMLForm::factory( 'ooui', $formDescriptor, $this->getContext() );
		$htmlForm
			->setCancelTarget( "" )->showCancel( $show = true )
			->setSubmitText( 'submit' )
			->setSubmitCallback( [ $this, 'trySubmit' ] )
			->show();
	}

	public function trySubmit( $formData ) {

	}
}

$wgSpecialPages['createinviteonlychannel'] = 'SpecialCreateInviteOnlyChannel';

