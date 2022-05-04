package com.DepartmentManager;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.staffManagement.StaffMember;
import com.staffManagement.staffmemberDbUtil;


@WebServlet("/ManagerViewServlet")
public class ManagerViewServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		
		PrintWriter out = response.getWriter();
		response.setContentType("text/html");
		
		String userName = request.getParameter("username");
		String password = request.getParameter("password");
		
		
        boolean isTrue;
        
        isTrue = staffmemberDbUtil.FrontEndValidate(userName, password);
        
		if(isTrue == true) {
			
			try {
				List<StaffMember> SfDetails = staffmemberDbUtil.Validate(userName, password);
				request.setAttribute("SfDetails", SfDetails);
				
			} catch (Exception e) {
				e.printStackTrace();
			}
			
			
			RequestDispatcher dis = request.getRequestDispatcher("ManagerViewAccount.jsp");
			dis.forward(request, response);
			
		}else{
			
			out.println("<script type = 'text/javascript' > ");
			out.println("alert('User Name Or Password Incorrect Please Try Again');");
			out.println("location = 'ManagerViewLogin.jsp'");
			out.println("</script>");
			
		
		}
	
		
	}
		
			
}


