
## Deployment

Install dependencies

```bash
composer require react/http:^1.10
```
Generate your [Let's Encrypt](https://www.google.com) certificate

Move files to project root
```bash
# cp /etc/letsencrypt/live/mysite.com/privkey.pem .
# cp /etc/letsencrypt/live/mysite.com/fullchain.pem .
# chmod 744 privkey.pem
# chmod 744 fullchain.pem
```

Run
```bash
docker-compose up
```

And make stuff.
