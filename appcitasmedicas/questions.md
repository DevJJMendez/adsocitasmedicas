esta bien formulada esta consulta:
```php
$statuses = Status::where('status_id', 1, 2)->select('status_id', 'id_common_attribute')->with([
            'commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            }
        ])->get();
```
