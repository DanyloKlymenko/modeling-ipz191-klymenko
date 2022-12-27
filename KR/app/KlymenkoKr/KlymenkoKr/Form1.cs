using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace KlymenkoKr
{
    public partial class Form1 : Form
    {
        private MetricUnit[] UNITS =
        {
            new MetricUnit("квадратні метри", 1),
            new MetricUnit("гектар", 10000),
            new MetricUnit("акр", 4046.85644643)

        };

        public Form1()
        {
            InitializeComponent();
            InitializeData();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (!double.TryParse(textBoxNumber.Text.Trim().ToString(), out double number))
            {
                MessageBox.Show("Not double");
                return;
            }

            MetricUnit metricFrom = Array.Find(UNITS, el => el.getName() == comboBoxFrom.SelectedItem.ToString());
            MetricUnit metricTo = Array.Find(UNITS, el => el.getName() == comboBoxTo.SelectedItem.ToString());

            MetricPair metricPair = new MetricPair(metricFrom, metricTo);
            MetricObject metricObject = new MetricObject(metricPair, number);

            double result = Transformer.Transform(metricObject);
            labelResult.Text = $"Result: {Math.Round(result, 5)}";
        }

        private void InitializeData()
        {
            foreach (MetricUnit currentUnit in UNITS)
            {
                comboBoxFrom.Items.Add(currentUnit.getName());
                comboBoxTo.Items.Add(currentUnit.getName());
            }
        }
    }
}
