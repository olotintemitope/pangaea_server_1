## How to received request

- Run vendor/bin/sail up
- subscribe to a topic via `api/subscribe/topic1` POST request 
  -- `{ “url”: “http://mysubscriber.test” }`

- Check your logs for when the topic has been published, you should receive a request body
in your log file

## Listening via Local Docker Container
Two or more docker containers communicates via IP addresses so if you like to see the 
webhook request in real life you will need to get your docker IP address.

- Type `docker ps` to locate container names
- Type `docker exec -it  serve_1-app_redis_1 /bin/sh` in your redis container to locate the docker IP
- In the redis container type `nslookup host.docker.internal` you should see something like

```yaml Server:         127.0.0.11
Address:        127.0.0.11:53

Non-authoritative answer:
*** Can't find host.docker.internal: No answer

Non-authoritative answer:
Name:   host.docker.internal
Address: 192.168.65.2
```

In the above scenario `192.168.65.2` is the IP and that's what you should use for your base request when you are
subscribing to a topic.

- Your default port is `8085`. Don't forget to append it to the IP address

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
