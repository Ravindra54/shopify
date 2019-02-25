<?php

namespace Shopify\Objects;

use Shopify\ShopifyObject;

class GiftCard extends ShopifyObject {

    protected $SINGLE = "admin/gift_cards/{id}.json";   // get url for single
    protected $ALL = "admin/gift_cards.json";           // get url for single
    protected $UPDATE = "admin/gift_cards/{id}.json";   // url for update single
    protected $COUNT = "admin/gift_cards/count.json";   // url for count
    protected $ARRAY_NAME = "gift_card";                // array name in update/create
    protected $is_having_primary_key = true;            // get is primary key in object or not

}
