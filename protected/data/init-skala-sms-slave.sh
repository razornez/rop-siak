mysqladmin drop skala_sms_slave -u skala -psc4l4bl3
mysqladmin create skala_sms_slave -u skala -psc4l4bl3
mysql skala_sms_slave < skala_sms_slave.sql -u skala -psc4l4bl3
