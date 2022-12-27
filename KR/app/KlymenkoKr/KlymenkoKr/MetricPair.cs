
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

public class MetricPair
{

    public MetricPair(MetricUnit fromMetricUnit, MetricUnit toMetric)
    {
        this.fromMetric = fromMetricUnit;
        this.toMetric = toMetric;
        this.rate = fromMetricUnit.getMValue() / toMetric.getMValue();
    }

    private MetricUnit fromMetric;

    private MetricUnit toMetric;

    private double rate;

    public MetricUnit getFromMetric()
    {
        return fromMetric;
    }

    public MetricUnit getToMetric()
    {
        return toMetric;
    }

    public double getRate()
    {
        return rate;
    }

}