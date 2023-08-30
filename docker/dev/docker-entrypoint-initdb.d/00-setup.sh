set -e

createuser --username=${POSTGRES_USER} --createdb --echo --login ${QURANAPP_USER}
echo "ALTER USER ${QURANAPP_USER} WITH PASSWORD '${QURANAPP_PW}';" | psql -U ${POSTGRES_USER}

psql -v ON_ERROR_STOP=1 --username "${POSTGRES_USER}" <<-EOSQL
	CREATE USER quranapp WITH CREATEDB PASSWORD 'quranapp';
	CREATE DATABASE quranapp;
	\c quranapp;
	GRANT ALL PRIVILEGES ON DATABASE quranapp TO quranapp;;
	CREATE EXTENSION IF NOT EXISTS pgcrypto WITH SCHEMA public;
  CREATE EXTENSION IF NOT EXISTS tablefunc WITH SCHEMA public;
  CREATE EXTENSION IF NOT EXISTS "uuid-ossp" WITH SCHEMA public;
EOSQL
