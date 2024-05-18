CREATE TABLE /*_*/chat (
  mwc_message_id bigint NOT NULL PRIMARY KEY,
  mwc_timestamp datetime, -- timestamp of chat message 
  mwc_actor_id bigint, -- foreign key to actor.actor_id
  mwc_message text, -- actual chat message
  mwc_message_visibility int(10), -- visibility as public [0] or private [1]
  mwc_channel_type bigint -- 0 is public, 1 is mods, 2+ is invite only channel id
) /*$wgDBTableOptions*/;
