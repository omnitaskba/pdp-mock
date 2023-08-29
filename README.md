# PDP Fake API
Placeholder API endpoints for PDP dashboard. 

Utilizes [Faker](https://github.com/fzaninotto/Faker) for dummy data.


## Endpoint

```http
   GET https://pdpmock.facemapping.me/api/fake/products

   ### Expect code 200   
   Content-Type: application/json

    {
        "current_page": 1,
        "data": [
            {
                "id": 9,
                "title": "impedit",
                "product_image": "https:\/\/via.placeholder.com\/640x480.png\/0066dd?text=nesciunt",
                "link_to_pdp": "http:\/\/www.satterfield.org\/",
                "market": "BB",
                "product_name": "fuga",
                "conversion": 7,
                "rank_conversion": 6,
                "product_avg_rank_conversion": 8,
                "cross_market_product_index_conversion": 3,
                "units_sold": 6,
                "page_views": 7,
                "percent_sales": 564.5,
                "rank_sales": 1,
                "product_avg_rank_sale": 35646.6,
                "cross_market_product_index_sales": 1495299.1,
                "first_price": 35.3,
                "byline": "Dolores iste laudantium molestias amet voluptatibus error qui. Minus quidem quisquam nemo numquam officia vitae nostrum. Quia vero debitis voluptates atque nulla eos reprehenderit.",
                "sizes_available": "tempora",
                "first_size": "beatae",
                "rating": 180494910,
                "reviews_count": 1,
                "description": "Maiores dolorem exercitationem quia. Dolore ex non qui rerum voluptatibus. Quia magni ad veritatis reprehenderit.",
                "category": {
                    "id": 1,
                    "name": "non",
                    "image": "https:\/\/via.placeholder.com\/640x480.png\/00ddee?text=suscipit"
                }
            }
        ],
        "first_page_url": "?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "",
        "per_page": 5,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
```

## Settings
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
