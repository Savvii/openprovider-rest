## Prepare on Mac
```
brew install openapi-generator
```

## Regenerate
```
openapi-generator generate \
  --input-spec 'https://docs.openprovider.com/swagger.json' \
  --generator-name 'php' \
  --artifact-version '1.0.0' \
  --invoker-package 'Savvii\OpenproviderRest' \
  --package-name 'PHP client for Openprovider REST API' \
  --git-repo-id 'openprovider-rest' \
  --git-user-id 'Savvii' \
  --git-host 'github.com' \
  --http-user-agent 'Savvii/OpenproviderRest/{packageVersion}' \
  --release-note 'Update'
```