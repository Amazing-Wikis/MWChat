CREATE TABLE /*_*/chat_users (
  cu_user_id int(10),
  cu_timestamp binary(12),
  cu_away binary(12),
  cu_session_token bigint NOT NULL
  cu_status int(10) -- 0 for not sanctions, 1 for banned
) /*$wgDBTableOptions*/;
