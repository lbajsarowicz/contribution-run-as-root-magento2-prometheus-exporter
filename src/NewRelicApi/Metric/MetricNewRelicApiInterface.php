<?php

declare(strict_types=1);

namespace RunAsRoot\PrometheusExporter\NewRelicApi\Metric;

use RunAsRoot\PrometheusExporter\Exception\PostMetricException;
use RunAsRoot\NewRelicApi\Response\Metric\MetricPostResponse;
use RunAsRoot\PrometheusExporter\Api\Data\MetricInterface;

interface MetricNewRelicApiInterface
{
    /**
     * @param MetricInterface[] $metrics
     * @throws PostMetricException
     */
    public function post(array $metrics): MetricPostResponse;
}
