-- all invited users per channel id, 1 user per row

CREATE TABLE /*_*/mwc_invite (
mwc_invite_id bigint NOT NULL PRIMARY KEY,
mwc_channel_id int, -- foreign key
mwc_invited_user bigint(20) unsigned, -- foreign key to actor.actor_id
mwc_invite_expire datetime, -- expiration of invite
mwc_invite_status int -- status of whether invite is expired
) /*$wgDBTableOptions*/;
