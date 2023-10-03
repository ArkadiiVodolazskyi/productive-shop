<?php

function header_items_combine_columns($column_1, $column_2) {
    $items = [];

    $column_1_count = $column_1 ? count($column_1) : 0;
    $column_2_count = $column_2 ? count($column_2) : 0;
    $columns_max_count = max($column_1_count, $column_2_count);
    if ($columns_max_count <= 0) {
        return null;
    }

    for ($i = 0; $i < $columns_max_count; $i++) {
        $item_1 = 'empty';
        $item_2 = 'empty';

        if ($column_1_count && ($column_1[$i] ?? null)) {
            $item_1 = $column_1[$i];
        }
        if ($column_2_count && ($column_2[$i] ?? null)) {
            $item_2 = $column_2[$i];
        }

        $items[] = $item_1;
        $items[] = $item_2;
    }

    return $items;
}
