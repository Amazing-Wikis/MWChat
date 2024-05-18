CREATE TABLE /*_*/chat_users (
  mwc_actor_id bigint(20) unsigned PRIMARY KEY, -- foreign key to actor.actor_id
  mwc_session_token bigint NOT NULL,
  mwc_status int(10) -- 0 for active, 1 for afk, 2 for banned
) /*$wgDBTableOptions*/;
