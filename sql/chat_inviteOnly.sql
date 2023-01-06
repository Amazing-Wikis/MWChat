CREATE TABLE /*_*/chat_inviteOnly (
cio_room_id int(10) NOT NULL PRIMARY KEY,
cio_room_name text,
cio_creator_id, -- foreign key to actor table
cio_status int(10), -- 0 for active, 1 for archive
) /*$wgDBTableOptions*/;



