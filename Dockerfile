FROM --platform=linux/x86_64 ubuntu:18.04

RUN yes | unminimize
RUN apt-get update
RUN apt-get install -y vim curl tmux
RUN locale-gen ja_JP.UTF-8  
# yes | unminimize ... Ubuntu の機能をカットせずに使うための記述です。
# locale-gen ja_JP.UTF-8 ... Ubuntu を日本語化するための記述です。
ENV LANG ja_JP.UTF-8
ENV TZ Asia/Tokyo
WORKDIR /gen2.0-umiumi2002