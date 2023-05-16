CREATE TABLE /*_*/chat (
  chat_timestamp bigint NOT NULL PRIMARY KEY,
  chat_message text,
  chat_user_id int(10), -- replace by actor id via foreign key
  chat_message_visibility int(10), -- visibility as public [0] or private [1]
  chat_type int(10), -- 0 is public, 1 is mods, 2+ is invite only channel id
  chat_to_id int(10) -- what is this for?
) /*$wgDBTableOptions*/;