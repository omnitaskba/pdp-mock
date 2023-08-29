# PDP Fake API
Placeholder API endpoints for PDP dashboard. 

Utilizes [Faker](https://github.com/fzaninotto/Faker) for dummy data.


## Endpoint settings
A reserved `_setting` key is used to specify any additional settings to the endpoint. Currently, only 3 settings are available: `identifiable`, `paginate`, and `auth`.

### Identifiable
The identifiable option will determine what column name is used to identify specific entries. The default value for the `identifiable` setting is `id`.

### Paginate
Straightforward here. If you are expecting multiple results, you can paginate the response by enabling the `paginate` option (which is by default `false`), and specify the amount of entries you want per page (so `5` in the example).

### Auth
Placeholder API also offers a 'fake' authentication layer. If enabled (it's `false` by default), you will receive a 401 unauthorized error if you do not call the endpoint with an `Authorization` header. No further checks are done on the token, it just checks if the header exists.

# Filters
## _count
You can pass in the query parameter `_count` to specify the number of results you want. Calling `/api/fake/products?_count=5` will return `5` products.

## _without
You can use the `_without` parameter to specify which columns you want to exclude. `/api/fake/products?_without=title` will return products without the title field.

## _only
Same logic as `_without`, but this time you specify which columns you want to include. `/api/fake/products?_only=title` will only return the title field for the products.

## _no_relationships
You can specify that you want to ignore all embedded relationships with the `_no_relationships` parameter. `/api/fake/products?_no_relationships=1` will not return the `category` entity inside the response.

## Filtering
You can also pass in a column name with a value to filter by value. `/api/fake/products?title=title-1` will only return entries where the `title` field is equal to `title-1`. Also works with relationships, so you can do something like `/api/fake/products?categories__id=1`, the format for this is `entityName__fieldName`.
