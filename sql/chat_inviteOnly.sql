CREATE TABLE /*_*/mwc_invite_only (
mwc_channel_id int(10) NOT NULL PRIMARY KEY,
mwc_channel_name text NOT NULL,
mwc_creator_id, -- foreign key to actor table
mwc_channel_status int, -- 1 for active, 0 for archive
) /*$wgDBTableOptions*/;

INSERT INTO chat_inviteOnly VALUES (1, moderation, 1, 1);
