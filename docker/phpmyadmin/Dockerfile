FROM phpmyadmin/phpmyadmin

ARG VERSION=1.0
LABEL version="${VERSION}" \
      maintainer="Stanislav Schmidt. <stanislav.schmidt90@googlemail.com>"

# Dependencies
RUN	apk update --no-cache && \
	apk upgrade --no-cache && \
    apk add --no-cache \
        git

WORKDIR /tmp

RUN git clone https://github.com/fransallen/fallen.git fallen\
    && mv fallen /www/themes/fallen

# Work dir
WORKDIR /var/www/app