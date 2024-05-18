CREATE TABLE /*_*/chat_users (
  cu_actor_id bigint(20) unsigned PRIMARY KEY, -- foreign key to actor.actor_id
  cu_session_token bigint NOT NULL,
  cu_status int(10) -- 0 for active, 1 for afk, 2 for banned
  cu_user_id int(10), -- replace with cu_actor_id
  cu_away binary(12), -- replace with cu_status
) /*$wgDBTableOptions*/;
