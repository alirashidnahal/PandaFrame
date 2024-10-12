<?php

namespace PandaFrame;

class DataFrame {
    protected $data;
    protected $columns;

    public function __construct(array $data, array $columns = []) {
        $this->data = $data;
        if (empty($columns)) {
            // اگر نام ستون‌ها مشخص نشده باشد، از کلیدهای اولین ردیف به عنوان نام ستون‌ها استفاده می‌کنیم
            $this->columns = array_keys($data[0]);
        } else {
            $this->columns = $columns;
        }
    }

    // متدی برای نمایش DataFrame به شکل جدول
    public function display() {
        echo implode("\t", $this->columns) . PHP_EOL;
        foreach ($this->data as $row) {
            echo implode("\t", $row) . PHP_EOL;
        }
    }

    // افزودن یک ردیف به DataFrame
    public function addRow(array $row) {
        $this->data[] = $row;
    }

    // افزودن یک ستون به DataFrame
    public function addColumn(string $name, array $columnData) {
        $this->columns[] = $name;
        foreach ($this->data as $key => $row) {
            $this->data[$key][] = $columnData[$key];
        }
    }

    // دسترسی به داده‌ها
    public function getData() {
        return $this->data;
    }

    // متدهای دیگر مانند فیلتر کردن، مرتب‌سازی و گروه‌بندی در آینده اضافه خواهند شد.
}

