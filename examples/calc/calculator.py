"""
Bellfre Example Agent Capability
Calculator Capability v0.2

Purpose:
    Provides deterministic arithmetic operations for a Bellfre agent.

Architecture:
    The calculator is a capability, not the agent itself.

    The agent decides:
        "Can this capability handle the request?"

    The calculator decides:
        "How do I execute the calculation?"

Future:
    This capability can be paired with:
        - BAT metadata
        - Agent Manifest entries
        - LLM-based intent routing
"""


class Calculator:
    """
    Basic arithmetic capability.
    """

    name = "arithmetic.calculate"

    description = (
        "Performs mathematical calculations using "
        "deterministic code."
    )

    def can_handle(self, request):
        """
        Determine whether this capability can process a request.

        Current MVP:
            Handles simple arithmetic expressions.

        Future:
            Intent routing will determine this.
        """

        if not isinstance(request, str):
            return False

        operators = ["+", "-", "*", "/"]

        return any(
            operator in request
            for operator in operators
        )

    def execute_request(self, request):
        """
        Convert a user request into a calculator operation.

        Example:
            "2+2"

        becomes:

            execute("add", 2, 2)
        """

        try:

            if "+" in request:
                a, b = request.split("+")
                return self.execute(
                    "add",
                    float(a),
                    float(b)
                )

            elif "-" in request:
                a, b = request.split("-")
                return self.execute(
                    "subtract",
                    float(a),
                    float(b)
                )

            elif "*" in request:
                a, b = request.split("*")
                return self.execute(
                    "multiply",
                    float(a),
                    float(b)
                )

            elif "/" in request:
                a, b = request.split("/")
                return self.execute(
                    "divide",
                    float(a),
                    float(b)
                )

            return {
                "success": False,
                "error": "Unable to parse calculation"
            }

        except Exception as e:
            return {
                "success": False,
                "error": str(e)
            }

    def execute(self, operation, a, b):
        """
        Execute a calculation.

        Args:
            operation:
                add, subtract, multiply, divide

            a:
                first number

            b:
                second number

        Returns:
            structured capability response
        """

        try:

            if operation == "add":
                result = a + b

            elif operation == "subtract":
                result = a - b

            elif operation == "multiply":
                result = a * b

            elif operation == "divide":

                if b == 0:
                    return {
                        "success": False,
                        "error": "Cannot divide by zero"
                    }

                result = a / b

            else:
                return {
                    "success": False,
                    "error": f"Unknown operation: {operation}"
                }

            return {
                "success": True,
                "capability": self.name,
                "operation": operation,
                "input": {
                    "a": a,
                    "b": b
                },
                "result": result
            }

        except Exception as e:

            return {
                "success": False,
                "error": str(e)
            }


# Standalone capability test
if __name__ == "__main__":

    calc = Calculator()

    tests = [
        "10+5",
        "10-5",
        "10*5",
        "10/5"
    ]

    for test in tests:
        print(test)
        print(calc.execute_request(test))
        print()