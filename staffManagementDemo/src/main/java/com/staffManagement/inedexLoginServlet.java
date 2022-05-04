package com.staffManagement;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/inedexLoginServlet")
public class inedexLoginServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		
		PrintWriter out = response.getWriter();
		response.setContentType("text/html");
		
		String userName = request.getParameter("username");
		String password = request.getParameter("password");
		
        boolean isTrue;
        
        isTrue = staffmemberDbUtil.FrontEndValidate(userName, password);
        
		if(isTrue == true) {
			
			RequestDispatcher dis = request.getRequestDispatcher("Home.jsp");
			dis.forward(request, response);
			
		}else{
			
			out.println("<script type = 'text/javascript' > ");
			out.println("alert('User Name Or Password Incorrect Please Try Again');");
			out.println("location = 'index.jsp'");
			out.println("</script>");
			
		
		}
		
		

		
		
	}
	

}
