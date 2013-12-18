LAN内のデバイスをスキャンして表示

install:
適当なweb公開ディレクトリに設置
同ディレクトリにsqlite3ファイルを作成

$ sqlite3 lanscan.sqlite3
sqlite> CREATE TABLE data(id integer primary key autoincrement, mac text, memo text, vendor text);

ディレクトリとsqlite3ファイルのパーミッションをapacheが書けるように設定

function:
MACアドレス、vendor、メモなどを表示、記憶

