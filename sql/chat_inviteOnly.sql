CREATE TABLE /*_*/chat_inviteOnly (
cio_room_id int(10) NOT NULL PRIMARY KEY,
cio_room_name text,
cio_creator_id, -- foreign key to actor table
cio_status int(10), -- 1 for active, 0 for archive
) /*$wgDBTableOptions*/;
INSERT INTO chat_inviteOnly VALUES (1, moderation, 1, 1);