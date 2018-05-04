FROM nginx:mainline-alpine

ARG VERSION=1.0
LABEL version="${VERSION}" \
      maintainer="Stanislav Schmidt. <stanislav.schmidt90@googlemail.com>"

ARG USERNAME=www-data
ARG GROUPNAME=www-data
ARG USERID=1001
ARG GROUPID=1001

WORKDIR /var/www

RUN addgroup -g ${GROUPID} -S ${GROUPNAME} \
 && adduser -u ${USERID} -D -S -G ${GROUPNAME} ${USERNAME} \
#RUN groupadd -g ${GROUPID} ${GROUPNAME} \
#    && useradd -r -m ${USERNAME} -g ${GROUPID} \
#    && usermod -a -G ${GROUPNAME} ${USERNAME} \
    && chown -R ${USERNAME}:${GROUPNAME} /var/www \
    && chmod 777 /var/www
