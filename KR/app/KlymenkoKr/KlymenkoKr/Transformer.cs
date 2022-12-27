
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

public static class Transformer
{

    public static double Transform(MetricObject metricObject)
    {
        return metricObject.getValue() * metricObject.getMetricPair().getRate();
    }

}