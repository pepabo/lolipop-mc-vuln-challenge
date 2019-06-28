# ロリポップ！マネージドクラウド
SSH_HOST = ssh-1.mc.lolipop.jp
SSH_PORT = 22 # change me
SSH_USER = user # change me
SSH_KEY = ${HOME}/.ssh/id_rsa # change me
DB_NAME = dbname # change me
DB_USER = dbuser # change me
DB_PASS = dbpass # change me
DB_HOST = mysql-1.mc.lolipop.lan # change me

# 下記は変更しないでください

PROMPT_SSH_HOST ?= $(shell bash -c 'read -p "SSH / SFTP ホスト名(${SSH_HOST}): " VAL; echo $${VAL:-${SSH_HOST}}')
PROMPT_SSH_PORT ?= $(shell bash -c 'read -p "SSH / SFTP ポート(${SSH_PORT}): " VAL; echo $${VAL:-${SSH_PORT}}')
PROMPT_SSH_USER ?= $(shell bash -c 'read -p "SSH / SFTP ユーザー名(${SSH_USER}): " VAL; echo $${VAL:-${SSH_USER}}')
PROMPT_SSH_KEY ?= $(shell bash -c 'read -p "SSH / SFTP 秘密鍵(${SSH_KEY}): " VAL; echo $${VAL:-${SSH_KEY}}')
PROMPT_DB_NAME  ?= $(shell bash -c 'read -p "データベース データベース名(${DB_NAME}): " VAL; echo $${VAL:-${DB_NAME}}')
PROMPT_DB_USER  ?= $(shell bash -c 'read -p "データベース ユーザー名(${DB_USER}): " VAL; echo $${VAL:-${DB_USER}}')
PROMPT_DB_PASS  ?= $(shell bash -c 'read -s -p "データベース パスワード(${DB_PASS}): " VAL; echo $${VAL:-${DB_PASS}}')
PROMPT_DB_HOST  ?= $(shell bash -c 'read -p "データベース データベースのホスト名(${DB_HOST}): " VAL; echo $${VAL:-${DB_HOST}}')

install:
	composer install

test:
	./vendor/bin/phpunit AuthTest.php

deploy:
	$(eval SSH_PORT=${PROMPT_SSH_PORT})
	$(eval SSH_USER=${PROMPT_SSH_USER})
	$(eval SSH_HOST=${PROMPT_SSH_HOST})
	$(eval SSH_KEY=${PROMPT_SSH_KEY})
	scp -P ${SSH_PORT} -i ${SSH_KEY} index.php auth.php ${SSH_USER}@${SSH_HOST}:/var/www/html/

ssh:
	$(eval SSH_PORT=${PROMPT_SSH_PORT})
	$(eval SSH_USER=${PROMPT_SSH_USER})
	$(eval SSH_HOST=${PROMPT_SSH_HOST})
	$(eval SSH_KEY=${PROMPT_SSH_KEY})
	ssh -p ${SSH_PORT} -i ${SSH_KEY} ${SSH_USER}@${SSH_HOST}
