-- all invited users per channel id, 1 user per row

CREATE TABLE /*_*/mwc_invite (
mwc_invite_id bigint NOT NULL PRIMARY KEY,
mwc_channel_id int, -- foreign key
mwc_invited_user -- foreign key to actor table
) /*$wgDBTableOptions*/;
