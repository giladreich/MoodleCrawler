using System;
using System.Windows.Forms;
using Moodle.WebCrawler.Utils;
using Moodle.WebCrawler.Views;

namespace Moodle.WebCrawler
{
    public static class Program
    {
        private static NetworkClient _networkClient;
        public static NetworkClient NetworkClient => _networkClient ?? (_networkClient = new NetworkClient());

        /// <summary>
        /// The main entry point for the application.
        /// </summary>
        [STAThread]
        static void Main()
        {
            Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);
            Application.Run(new LoginWindow());
        }
    }
}
