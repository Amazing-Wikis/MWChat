<?php

class SpecialManageInviteOnlyChannel extends SpecialPage {
	public function __construct( $name = '', $restriction = '', $listed = true ) {
		parent::__construct( 'mwc-manageinviteonlychannel', '' );
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
		$this->getOutput()->setPageTitle( 'Create Incident Ticket' );

		$formDescriptor = [
			'mwc-channel-name' => [
				'class' => 'HTMLTextField',
				'label-message' => 'mwc-channel-name',
				'required' => true,
			],
			'mwc-status' => [
				'class' => 'HTMLRadioField',
				'label-message' => 'mwc-status-type',
				'options' => [
					wfMessage( 'mwc-enabled' )->text() => 0,
					wfMessage( 'mwc-archived' )->text() => 1,
				],
				'name'  => 'wpstaffsupporttype',
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
			'mwc-remove-user' => [
				'type' => 'user',
				'required' => true,
				'label-message' => 'mwc-remove-user',
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

$wgSpecialPages['manageinviteonlychannel'] = 'SpecialManageInviteOnlyChannel';
