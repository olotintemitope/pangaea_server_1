## How to received request

- Run vendor/bin/sail up
- subscribe to a topic via `api/subscribe/topic1` POST request
  
{ “url”: “http://mysubscriber.test” }

- Check your logs for when the topic has been published, you should receive a request body
in your log file

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
