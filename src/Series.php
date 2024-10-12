<?php

namespace PandaFrame;

class Series {
    protected $data;

    public function __construct(array $data) {
        $this->data = $data;
    }

    public function mean() {
        return array_sum($this->data) / count($this->data);
    }

    public function max() {
        return max($this->data);
    }

    public function min() {
        return min($this->data);
    }

    // متدهای دیگر مانند فیلتر کردن و مرتب‌سازی داده‌ها
}

