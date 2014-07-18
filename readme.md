# Github webhook to deploy to parsejs

Working in a team with parsejs cloud code is really not a good idea. 
One `parse deploy` and you've probably ruined a co-worker's day.

With this hook just force any teammembers (any method of force is ok...including threat of blunt objects), to push to a github branch, and this hook will automatically deploy to parse for you, insuring that everybody is working on the same thing.

Look...this is the best we could come up with.

Anyway, simply put the hook on any php-enabled web server that github can talk to, and let it roll.

Currently, the hook matches the pushed branch to a parsejs application, so either push to a branch with the name of your application, or modify the parse `global.json` to point to your branch:

```javascript
"applications": {
        "_default": {
            "link": "master"
        }, 
        "master": {
            "applicationId": "###################", 
            "masterKey": "#####################"
        }
    }, 
```
