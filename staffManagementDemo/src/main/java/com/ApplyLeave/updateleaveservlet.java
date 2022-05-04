package com.ApplyLeave;

import java.io.IOException;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/updateleaveservlet")
public class updateleaveservlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String count = request.getParameter("count");
		String name = request.getParameter("name");
		String id = request.getParameter("id");
		String type = request.getParameter("type");
		String date = request.getParameter("date");
		String reason = request.getParameter("reason");
		
		
		
		boolean isTrue;
		
		isTrue = applyLeaveDbUtill.updateLeave(count, name, id, type, date, reason);
		
		if(isTrue==true) {
	
			List<viewleave> vldetails = applyLeaveDbUtill.getLeaveDetails(count);
			request.setAttribute("vldetails", vldetails);
			
			RequestDispatcher dis = request.getRequestDispatcher("viewsuccess.jsp");
			dis.forward(request, response);
			
		}else {
			
			List<viewleave> vldetails = applyLeaveDbUtill.getLeaveDetails(count);
			request.setAttribute("vldetails", vldetails);
			
			RequestDispatcher dis = request.getRequestDispatcher("viewsuccess.jsp");
			dis.forward(request, response);
			
		}
		
	
		
	}

}
