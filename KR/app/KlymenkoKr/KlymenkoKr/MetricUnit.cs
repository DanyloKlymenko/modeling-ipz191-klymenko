
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

public class MetricUnit {

    public MetricUnit(string name, double mValue) {
        this.name = name;
        this.mValue = mValue;
    }

    private string name;

    private double mValue;

    public string getName() {
        return name;
    }
   
    public double getMValue() {
        return mValue;
    }

}