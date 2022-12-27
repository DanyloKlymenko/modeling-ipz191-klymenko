
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

public class MetricObject
{
    private MetricPair metricPair;

    private double value;

    public MetricObject(MetricPair metricPair, double value)
    {
        this.value = value;
        this.metricPair = metricPair;
    }

    public MetricPair getMetricPair()
    {
        return metricPair;
    }

    public double getValue()
    {
        return value;
    }

}