    fast_kdf_iter   rekey_kdf_iter  cipher_page_size    cipher_default_page_size    cipher_default_use_hmac cipher_use_hmac cipher_hmac_pgno    le  be  native  cipher_hmac_salt_mask   x'  %02x    SQLite format 3 main        SELECT 'CREATE TABLE %s.' || substr(sql,14)   FROM sqlite_master WHERE type='table' AND name!='sqlite_sequence'   AND rootpage>0        SELECT 'CREATE INDEX %s.' || substr(sql,14)  FROM sqlite_master WHERE sql LIKE 'CREATE INDEX %%'        SELECT 'CREATE UNIQUE INDEX %s.' || substr(sql,21)   FROM sqlite_master WHERE sql LIKE 'CREATE UNIQUE INDEX %%' SELECT 'INSERT INTO %s.' || quote(name) || ' SELECT * FROM main.' || quote(name) || ';'FROM main.sqlite_master WHERE type = 'table' AND name!='sqlite_sequence'   AND rootpage>0        SELECT 'DELETE FROM %s.' || quote(name) || ';' FROM %s.sqlite_master WHERE name='sqlite_sequence'       SELECT 'INSERT INTO %s.' || quote(name) || ' SELECT * FROM main.' || quote(name) || ';' FROM %s.sqlite_master WHERE name=='sqlite_sequence';    INSERT INTO %s.sqlite_master   SELECT type, name, tbl_name, rootpage, sql    FROM main.sqlite_master   WHERE type='view' OR type='trigger'      OR (type='table' AND rootpage=0)    aes-256-cbc PRAGMA user_version;    %s-migrated PRAGMA cipher_use_hmac = OFF;   PRAGMA kdf_iter = 4000; ATTACH DATABASE '%s-migrated' as migrate KEY '%q';  %s%s    PRAGMA migrate.user_version = %d;   SELECT sqlcipher_export('migrate'); BEGIN;  '   stdout  stderr  off wb  Elapsed time:%.3f ms - %s
  openssl OpenSSL 1.0.1g 7 Apr 2014   HAS_CODEC   SYSTEM_MALLOC   THREADSAFE=1    SQLITE_ 20b:20e 20c:20e 20e 40f-21a-21d now local time unavailable  localtime   unixepoch   utc weekday     start of    month   year    day hour    minute  second  %04d-%02d-%02d %02d:%02d:%02d   %02d:%02d:%02d  %04d-%02d-%02d  %02d    %06.3f  %03d    %.16g   %lld    %04d    failed to allocate %u bytes of memory   failed memory resize %u to %u bytes %   NaN NULL    (NULL)  .   922337203685477580  API call with %s database connection pointer    unopened    invalid Savepoint   AutoCommit  Transaction SorterNext  PrevIfOpen  NextIfOpen  Prev    Next    Checkpoint  JournalMode Vacuum  VFilter VUpdate Goto    Gosub   Return  InitCoroutine   EndCoroutine    Yield   Not HaltIfNull  Halt    Integer Int64   String  Null    SoftNull    Blob    Variable    Move    Copy    SCopy   IntCopy ResultRow   CollSeq Function0   Function    AddImm  MustBeInt   RealAffinity    Cast    Pe