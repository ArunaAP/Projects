package com.ApplyLeave;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;



@WebServlet("/viewleaveservlet")
public class viewleaveservlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		
		
		PrintWriter out = response.getWriter();
		response.setContentType("text/html");
		
		String id = request.getParameter("id");
		String date = request.getParameter("date");
		
		boolean isTrue;
		
		isTrue = applyLeaveDbUtill.FrontEndValidate(id, date);
		
		if(isTrue == true) {
			
			
			try {
				List<viewleave> vldetails = applyLeaveDbUtill.Validate(id, date);
				request.setAttribute("vldetails", vldetails);
				
			} catch (Exception e) {
				e.printStackTrace();
			}
			
			
			RequestDispatcher dis = request.getRequestDispatcher("viewsuccess.jsp");
			dis.forward(request, response);
			
		}else {
			
			out.println("<script type = 'text/javascript' > ");
			out.println("alert('ID Or Date Incorrect Please Try Again');");
			out.println("location = 'viewleave.jsp'");
			out.println("</script>");
		}
		
		

		
		
		
		
	}

}
