/* all invited users per channel id, 1 user per row*/
CREATE TABLE /*_*/chat_inviteOnly_users (
cio_room_id, -- foreign key to chat_inviteOnly
cio_invited_user_id, -- foreign key to actor table
) /*$wgDBTableOptions*/;