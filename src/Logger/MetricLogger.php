<?php

declare(strict_types=1);

namespace RunAsRoot\PrometheusExporter\Logger;

use Magento\Framework\Logger\Monolog;

class MetricLogger extends Monolog
{
    public function __construct(MetricsLogHandler $logHandler)
    {
        parent::__construct('rar_prometheus_metric_logger', [$logHandler]);
    }
}
