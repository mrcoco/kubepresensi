<?php
/**
 * kubepresensi
 * producer.php
 * Author: DwiAgus
 * Email : dwiagus@uny.ac.id
 * Date  : 25/08/2020
 * Time  : 0:38
 */
$conf = new RdKafka\Conf();
$conf->set('metadata.broker.list', 'localhost:9092');
$producer = new RdKafka\Producer($conf);
$topic = $producer->newTopic("presensi");
$topic->produce(RD_KAFKA_PARTITION_UA, 0, "Message insert--data1");
$producer->poll(0);
$producer->flush(10000);