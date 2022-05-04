package com.ApplyLeave;

import java.io.IOException;
import java.util.List;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/deleteleaveservlet")
public class deleteleaveservlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String count = request.getParameter("count");
		
		boolean isTrue;
		
		isTrue = applyLeaveDbUtill.deleteLeave(count);
		
		if(isTrue == true) {
			
			RequestDispatcher dis = request.getRequestDispatcher("applyinsert.jsp");
			dis.forward(request, response);
			
		}else {
			
			List<viewleave> vldetails = applyLeaveDbUtill.getLeaveDetails(count);
			request.setAttribute("vldetails", vldetails);
			
			RequestDispatcher dis = request.getRequestDispatcher("viewsuccess.jsp");
			dis.forward(request, response);
			
		}
		
		
		
		
	}

}
