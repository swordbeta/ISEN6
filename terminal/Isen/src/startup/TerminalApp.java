package startup;

import java.awt.BorderLayout;
import java.awt.DisplayMode;

import javax.swing.JFrame;
import javax.swing.JPanel;

import view.FullScreen;

public class TerminalApp extends JFrame {
	
	private static final long serialVersionUID = 2502662043151826952L;
	public static void main(String[] args) {
		new TerminalApp();
	}
	public TerminalApp()
	{
		FullScreen f = new FullScreen();
		DisplayMode dm = new DisplayMode(320, 240, 16, DisplayMode.REFRESH_RATE_UNKNOWN);
		
		f.setFullScreen(dm, this);
		System.out.println(dm.getBitDepth());
		JPanel panel = new JPanel(new BorderLayout());
		Screen sc = new Screen();
		panel.add(sc);
		setContentPane(panel);
		pack();
		sc.start();
		setLocationRelativeTo(null);
		setVisible(true);
	}

}
