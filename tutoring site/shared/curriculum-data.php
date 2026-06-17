<?php
if (!function_exists('sm_curriculum_topic')) {
    function sm_curriculum_topic(string $title, string $description): array
    {
        return [
            'title' => $title,
            'description' => $description,
            'textbook_link' => null,
            'extra_practice_link' => null,
        ];
    }
}

$curriculumResourceSets = [
    'elementary' => [
        'Number' => [
            'textbook_link' => ['label' => 'CK-12 Arithmetic', 'url' => 'https://www.ck12.org/c/arithmetic/'],
            'extra_practice_link' => ['label' => 'GeoGebra Number Sense', 'url' => 'https://www.geogebra.org/math/number-sense'],
        ],
        'Algebra' => [
            'textbook_link' => ['label' => 'CK-12 Algebra', 'url' => 'https://www.ck12.org/c/algebra/'],
            'extra_practice_link' => ['label' => 'GeoGebra Algebra', 'url' => 'https://www.geogebra.org/math/algebra'],
        ],
        'Data' => [
            'textbook_link' => ['label' => 'CK-12 Statistics', 'url' => 'https://www.ck12.org/c/statistics/'],
            'extra_practice_link' => ['label' => 'GeoGebra Probability and Statistics', 'url' => 'https://www.geogebra.org/math/statistics-probability'],
        ],
        'Spatial Sense' => [
            'textbook_link' => ['label' => 'CK-12 Measurement', 'url' => 'https://www.ck12.org/c/measurement/'],
            'extra_practice_link' => ['label' => 'GeoGebra Geometry', 'url' => 'https://www.geogebra.org/math/geometry'],
        ],
        'Financial Literacy' => [
            'textbook_link' => ['label' => 'NGPF Middle School Money Lessons', 'url' => 'https://www.ngpf.org/courses/middle-school-course/'],
            'extra_practice_link' => ['label' => 'NGPF Consumer Skills', 'url' => 'https://www.ngpf.org/curriculum/consumer-skills/'],
        ],
    ],
    'middle' => [
        'Number' => [
            'textbook_link' => ['label' => 'CK-12 Arithmetic', 'url' => 'https://www.ck12.org/c/arithmetic/'],
            'extra_practice_link' => ['label' => 'GeoGebra Number Sense', 'url' => 'https://www.geogebra.org/math/number-sense'],
        ],
        'Algebra' => [
            'textbook_link' => ['label' => 'CK-12 Algebra', 'url' => 'https://www.ck12.org/c/algebra/'],
            'extra_practice_link' => ['label' => 'GeoGebra Algebra', 'url' => 'https://www.geogebra.org/math/algebra'],
        ],
        'Data' => [
            'textbook_link' => ['label' => 'CK-12 Probability and Statistics', 'url' => 'https://www.ck12.org/c/probability/'],
            'extra_practice_link' => ['label' => 'GeoGebra Probability and Statistics', 'url' => 'https://www.geogebra.org/math/statistics-probability'],
        ],
        'Spatial Sense' => [
            'textbook_link' => ['label' => 'CK-12 Geometry', 'url' => 'https://www.ck12.org/c/geometry/'],
            'extra_practice_link' => ['label' => 'GeoGebra Measurement', 'url' => 'https://www.geogebra.org/math/measurement'],
        ],
        'Financial Literacy' => [
            'textbook_link' => ['label' => 'NGPF Middle School Course', 'url' => 'https://www.ngpf.org/courses/middle-school-course/'],
            'extra_practice_link' => ['label' => 'NGPF Budgeting Unit', 'url' => 'https://www.ngpf.org/curriculum/budgeting/'],
        ],
    ],
    'grade9' => [
        'Number' => [
            'textbook_link' => ['label' => 'OpenStax Prealgebra', 'url' => 'https://openstax.org/details/books/prealgebra-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Number Sense', 'url' => 'https://www.geogebra.org/math/number-sense'],
        ],
        'Algebra' => [
            'textbook_link' => ['label' => 'OpenStax Elementary Algebra', 'url' => 'https://openstax.org/details/books/elementary-algebra-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Algebra', 'url' => 'https://www.geogebra.org/math/algebra'],
        ],
        'Data' => [
            'textbook_link' => ['label' => 'CK-12 Statistics', 'url' => 'https://www.ck12.org/c/statistics/'],
            'extra_practice_link' => ['label' => 'GeoGebra Probability and Statistics', 'url' => 'https://www.geogebra.org/math/statistics-probability'],
        ],
        'Spatial Sense' => [
            'textbook_link' => ['label' => 'CK-12 Geometry', 'url' => 'https://www.ck12.org/c/geometry/'],
            'extra_practice_link' => ['label' => 'GeoGebra Geometry', 'url' => 'https://www.geogebra.org/math/geometry'],
        ],
        'Financial Literacy' => [
            'textbook_link' => ['label' => 'NGPF Financial Algebra', 'url' => 'https://www.ngpf.org/math/financial-algebra/'],
            'extra_practice_link' => ['label' => 'NGPF Budgeting Unit', 'url' => 'https://www.ngpf.org/curriculum/budgeting/'],
        ],
    ],
    'grade10' => [
        'Number' => [
            'textbook_link' => ['label' => 'OpenStax Intermediate Algebra', 'url' => 'https://openstax.org/details/books/intermediate-algebra-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Number Sense', 'url' => 'https://www.geogebra.org/math/number-sense'],
        ],
        'Algebra' => [
            'textbook_link' => ['label' => 'OpenStax Intermediate Algebra', 'url' => 'https://openstax.org/details/books/intermediate-algebra-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Algebra', 'url' => 'https://www.geogebra.org/math/algebra'],
        ],
        'Data' => [
            'textbook_link' => ['label' => 'OpenStax Introductory Statistics', 'url' => 'https://openstax.org/details/books/introductory-statistics-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Probability and Statistics', 'url' => 'https://www.geogebra.org/math/statistics-probability'],
        ],
        'Spatial Sense' => [
            'textbook_link' => ['label' => 'CK-12 Geometry', 'url' => 'https://www.ck12.org/c/geometry/'],
            'extra_practice_link' => ['label' => 'GeoGebra Geometry', 'url' => 'https://www.geogebra.org/math/geometry'],
        ],
        'Financial Literacy' => [
            'textbook_link' => ['label' => 'NGPF Financial Algebra', 'url' => 'https://www.ngpf.org/math/financial-algebra/'],
            'extra_practice_link' => ['label' => 'NGPF Consumer Skills', 'url' => 'https://www.ngpf.org/curriculum/consumer-skills/'],
        ],
    ],
    'senior' => [
        'Number' => [
            'textbook_link' => ['label' => 'OpenStax Algebra and Trigonometry', 'url' => 'https://openstax.org/details/books/algebra-and-trigonometry-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Number Sense', 'url' => 'https://www.geogebra.org/math/number-sense'],
        ],
        'Algebra' => [
            'textbook_link' => ['label' => 'OpenStax Algebra and Trigonometry', 'url' => 'https://openstax.org/details/books/algebra-and-trigonometry-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Algebra', 'url' => 'https://www.geogebra.org/math/algebra'],
        ],
        'Data' => [
            'textbook_link' => ['label' => 'OpenStax Introductory Statistics', 'url' => 'https://openstax.org/details/books/introductory-statistics-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Probability and Statistics', 'url' => 'https://www.geogebra.org/math/statistics-probability'],
        ],
        'Spatial Sense' => [
            'textbook_link' => ['label' => 'CK-12 Trigonometry', 'url' => 'https://www.ck12.org/c/trigonometry/'],
            'extra_practice_link' => ['label' => 'GeoGebra Geometry', 'url' => 'https://www.geogebra.org/math/geometry'],
        ],
        'Financial Literacy' => [
            'textbook_link' => ['label' => 'NGPF Financial Algebra', 'url' => 'https://www.ngpf.org/math/financial-algebra/'],
            'extra_practice_link' => ['label' => 'NGPF Investing Unit', 'url' => 'https://www.ngpf.org/curriculum/investing/'],
        ],
    ],
    'grade12' => [
        'Number' => [
            'textbook_link' => ['label' => 'OpenStax Calculus Volume 1', 'url' => 'https://openstax.org/details/books/calculus-volume-1'],
            'extra_practice_link' => ['label' => 'GeoGebra Calculus', 'url' => 'https://www.geogebra.org/t/calculus'],
        ],
        'Algebra' => [
            'textbook_link' => ['label' => 'OpenStax Algebra and Trigonometry', 'url' => 'https://openstax.org/details/books/algebra-and-trigonometry-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Algebra', 'url' => 'https://www.geogebra.org/math/algebra'],
        ],
        'Data' => [
            'textbook_link' => ['label' => 'OpenStax Introductory Statistics', 'url' => 'https://openstax.org/details/books/introductory-statistics-2e'],
            'extra_practice_link' => ['label' => 'GeoGebra Probability and Statistics', 'url' => 'https://www.geogebra.org/math/statistics-probability'],
        ],
        'Spatial Sense' => [
            'textbook_link' => ['label' => 'CK-12 Calculus', 'url' => 'https://www.ck12.org/c/calculus/'],
            'extra_practice_link' => ['label' => 'GeoGebra Calculus', 'url' => 'https://www.geogebra.org/t/calculus'],
        ],
        'Financial Literacy' => [
            'textbook_link' => ['label' => 'NGPF Financial Algebra', 'url' => 'https://www.ngpf.org/math/financial-algebra/'],
            'extra_practice_link' => ['label' => 'NGPF Types of Credit', 'url' => 'https://www.ngpf.org/curriculum/types-of-credit/'],
        ],
    ],
];

if (!function_exists('sm_curriculum_resource_set')) {
    function sm_curriculum_resource_set(string $grade): string
    {
        $gradeNumber = (int) filter_var($grade, FILTER_SANITIZE_NUMBER_INT);

        if ($gradeNumber <= 5) {
            return 'elementary';
        }

        if ($gradeNumber <= 8) {
            return 'middle';
        }

        if ($gradeNumber === 9) {
            return 'grade9';
        }

        if ($gradeNumber === 10) {
            return 'grade10';
        }

        if ($gradeNumber === 12) {
            return 'grade12';
        }

        return 'senior';
    }
}

$curriculumRoadmap = [
    [
        'grade' => 'Grade 3',
        'focus' => 'Build reliable whole-number, patterning, data, measurement, geometry, and money foundations.',
        'source' => [
            'label' => 'Ontario Grade 3 Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/elementary-mathematics/grades/grade-3',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Whole numbers to 1,000', 'Represent, compare, order, compose, and decompose whole numbers using place value and multiple models.'),
                sm_curriculum_topic('Multiplication and division foundations', 'Develop multiplication and division facts through equal groups, arrays, skip counting, and related problem solving.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Patterns and relationships', 'Describe, extend, and create growing and shrinking patterns using words, tables, numbers, and rules.'),
                sm_curriculum_topic('Equations and equality', 'Use unknown values and balanced equations to represent simple mathematical relationships.'),
            ],
            'Data' => [
                sm_curriculum_topic('Data collection and displays', 'Collect categorical and discrete data, then organize it in tables, charts, pictographs, and bar graphs.'),
                sm_curriculum_topic('Interpreting data', 'Read data displays, make comparisons, and answer questions using evidence from the data.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Two-dimensional shapes and three-dimensional objects', 'Identify, sort, and compare shapes and objects by geometric properties.'),
                sm_curriculum_topic('Length, perimeter, area, and time', 'Estimate, measure, and solve problems involving common metric units, perimeter, area, and elapsed time.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Canadian money amounts', 'Represent, count, and compare money amounts using coins and bills in practical situations.'),
                sm_curriculum_topic('Spending and saving choices', 'Discuss needs, wants, saving goals, and simple choices involving money.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 4',
        'focus' => 'Strengthen place value, operations, pattern rules, graphing, measurement, geometry, and everyday money decisions.',
        'source' => [
            'label' => 'Ontario Grade 4 Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/elementary-mathematics/grades/grade-4',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Whole numbers to 10,000', 'Represent, compare, order, round, compose, and decompose whole numbers using place value.'),
                sm_curriculum_topic('Fractions, decimals, and operations', 'Model fractions and decimals, then solve addition, subtraction, multiplication, and division problems.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Pattern rules and tables', 'Represent pattern relationships with tables, terms, and rules.'),
                sm_curriculum_topic('Variables and simple equations', 'Use variables and equations to model unknown quantities in one-step situations.'),
            ],
            'Data' => [
                sm_curriculum_topic('Multiple data displays', 'Create and compare bar graphs, pictographs, line plots, and tables for the same data set.'),
                sm_curriculum_topic('Likelihood and probability language', 'Use probability language to describe and compare the likelihood of simple events.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Angles, symmetry, and transformations', 'Recognize angles, lines of symmetry, translations, reflections, and rotations.'),
                sm_curriculum_topic('Area, perimeter, mass, capacity, and time', 'Estimate, measure, and solve problems using metric units and measurement relationships.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Methods of payment', 'Compare cash, debit, credit, and electronic payment choices in familiar situations.'),
                sm_curriculum_topic('Budgets and saving goals', 'Create simple plans for spending, saving, and tracking money over time.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 5',
        'focus' => 'Connect fractions, decimals, variables, data analysis, measurement, geometry, and financial planning.',
        'source' => [
            'label' => 'Ontario Grade 5 Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/elementary-mathematics/grades/grade-5',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Whole numbers, fractions, and decimals', 'Represent and compare larger whole numbers, fractions, mixed numbers, and decimal numbers.'),
                sm_curriculum_topic('Operations with whole numbers and decimals', 'Solve multi-step problems involving addition, subtraction, multiplication, and division.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Expressions and equations', 'Write and evaluate simple expressions and solve equations with unknown values.'),
                sm_curriculum_topic('Patterning and coding logic', 'Represent pattern rules and use ordered instructions to solve mathematical problems.'),
            ],
            'Data' => [
                sm_curriculum_topic('Data displays and central tendency', 'Create, interpret, and compare data displays, including measures such as mean and mode where appropriate.'),
                sm_curriculum_topic('Probability experiments', 'Describe experimental and theoretical probability in simple situations.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Triangles, quadrilaterals, and coordinate grids', 'Classify shapes by properties and locate points using coordinate grids.'),
                sm_curriculum_topic('Volume, area, and unit conversion', 'Estimate and calculate measurements while converting among common metric units.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Unit prices and comparison shopping', 'Compare prices, quantities, and value when making purchasing decisions.'),
                sm_curriculum_topic('Earning, saving, and giving', 'Explore income, saving targets, charitable giving, and responsible money choices.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 6',
        'focus' => 'Develop proportional reasoning, integers, equations, data interpretation, measurement, geometry, and financial decision making.',
        'source' => [
            'label' => 'Ontario Grade 6 Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/elementary-mathematics/grades/grade-6',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Integers, decimals, fractions, ratios, and percents', 'Represent, compare, and convert among number forms used in proportional reasoning.'),
                sm_curriculum_topic('Operations and multi-step problem solving', 'Use efficient strategies for whole numbers, decimals, fractions, and percentages.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Variables, expressions, and equations', 'Write, evaluate, and solve equations that model mathematical relationships.'),
                sm_curriculum_topic('Pattern relationships and graphing', 'Represent patterns using tables, graphs, equations, and descriptions.'),
            ],
            'Data' => [
                sm_curriculum_topic('Graphs, samples, and conclusions', 'Collect data, choose appropriate graphs, and make conclusions from data sets.'),
                sm_curriculum_topic('Probability and predictions', 'Use probability models and experimental results to make and justify predictions.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Angles, polygons, and transformations', 'Measure, classify, construct, and transform geometric figures.'),
                sm_curriculum_topic('Area, surface area, volume, and conversions', 'Solve problems involving composite shapes and common metric unit relationships.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Rates, percentages, and taxes', 'Apply rates, percentages, discounts, sales tax, and tips to everyday contexts.'),
                sm_curriculum_topic('Financial goals and trade-offs', 'Compare plans for earning, saving, spending, borrowing, and donating.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 7',
        'focus' => 'Extend proportional reasoning, integer operations, algebraic modelling, probability, geometry, and consumer math.',
        'source' => [
            'label' => 'Ontario Grade 7 Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/elementary-mathematics/grades/grade-7',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Integers and rational numbers', 'Operate with integers, fractions, decimals, ratios, rates, and percents in real contexts.'),
                sm_curriculum_topic('Proportional relationships', 'Use equivalent ratios, unit rates, and percent reasoning to solve problems.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Algebraic expressions and equations', 'Simplify expressions and solve equations using inverse operations and models.'),
                sm_curriculum_topic('Linear relationships', 'Represent relationships with tables, graphs, equations, and verbal descriptions.'),
            ],
            'Data' => [
                sm_curriculum_topic('Data analysis and bias', 'Analyze data collection methods, samples, and possible sources of bias.'),
                sm_curriculum_topic('Probability models', 'Compare theoretical and experimental probability for compound and repeated events.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Circles, prisms, and cylinders', 'Investigate circles and solve measurement problems involving three-dimensional objects.'),
                sm_curriculum_topic('Scale drawings and transformations', 'Use scale, similarity, translations, reflections, rotations, and dilations to solve problems.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Interest, fees, and exchange rates', 'Explore simple interest, fees, and currency exchange in practical situations.'),
                sm_curriculum_topic('Comparing financial options', 'Evaluate purchases, payment plans, discounts, and long-term value.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 8',
        'focus' => 'Prepare for high school math through rational numbers, linear relations, data modelling, geometry, and financial fluency.',
        'source' => [
            'label' => 'Ontario Grade 8 Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/elementary-mathematics/grades/grade-8',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Rational numbers, powers, ratios, rates, and percents', 'Represent and operate with rational numbers and proportional relationships.'),
                sm_curriculum_topic('Problem solving with number properties', 'Use square roots, powers, factors, multiples, and order of operations strategically.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Linear patterns and equations', 'Model linear relationships using graphs, tables, equations, and words.'),
                sm_curriculum_topic('Solving equations and inequalities', 'Solve and verify equations and inequalities with one or more operations.'),
            ],
            'Data' => [
                sm_curriculum_topic('Scatter plots and relationships', 'Create scatter plots and describe trends, correlations, and outliers.'),
                sm_curriculum_topic('Probability and data-informed decisions', 'Use probability and data analysis to make predictions and justify conclusions.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Pythagorean relationships and measurement', 'Use right-triangle relationships and formulas to solve measurement problems.'),
                sm_curriculum_topic('Volume, surface area, and transformations', 'Solve problems involving cylinders, composite figures, scale, and transformations.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Budgets, interest, and credit', 'Create budgets and compare saving, borrowing, interest, and credit choices.'),
                sm_curriculum_topic('Financial risk and consumer decisions', 'Analyze financial claims, subscriptions, contracts, and long-term costs.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 9',
        'focus' => 'Align with Ontario de-streamed Grade 9 mathematics through number sense, algebra, data, geometry, measurement, and finance.',
        'source' => [
            'label' => 'Ontario Grade 9 Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/secondary-mathematics/courses/mth1w',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Number sets, powers, and proportional reasoning', 'Work with rational numbers, powers, ratios, rates, percents, and equivalent representations.'),
                sm_curriculum_topic('Applications of number sense', 'Use number strategies to estimate, calculate, and solve multi-step real-world problems.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Linear and non-linear relationships', 'Represent relationships using graphs, equations, tables, and technology.'),
                sm_curriculum_topic('Solving equations and coding connections', 'Solve equations and use computational thinking to model mathematical processes.'),
            ],
            'Data' => [
                sm_curriculum_topic('Data collection, representation, and analysis', 'Plan investigations, represent data, interpret trends, and critique conclusions.'),
                sm_curriculum_topic('Mathematical modelling', 'Use data and assumptions to build, test, and refine models for real situations.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Geometry and measurement relationships', 'Solve problems involving shapes, solids, measurement formulas, and geometric reasoning.'),
                sm_curriculum_topic('Optimization and design problems', 'Use measurement and spatial reasoning to compare and optimize solutions.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Budgets, income, and expenses', 'Create and analyze budgets involving income, fixed costs, variable costs, and savings.'),
                sm_curriculum_topic('Interest, credit, and financial decisions', 'Compare financial products and understand interest, debt, and long-term consequences.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 10',
        'focus' => 'Bridge Grade 9 foundations to Ontario Grade 10 pathways with algebraic, graphical, geometric, and applied reasoning.',
        'source' => [
            'label' => 'Ontario Secondary Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/secondary-mathematics',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Exponents, radicals, and precision', 'Apply exponent laws, radicals, estimation, rounding, and precision in algebraic and measurement contexts.'),
                sm_curriculum_topic('Rates, ratios, and unit analysis', 'Use proportional reasoning to solve applied problems involving speed, density, scale, and unit conversion.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Linear systems and analytic geometry', 'Solve systems of equations and connect algebraic solutions to intersections on coordinate planes.'),
                sm_curriculum_topic('Quadratic relations', 'Represent, factor, expand, graph, and interpret quadratic relationships.'),
            ],
            'Data' => [
                sm_curriculum_topic('Trend analysis and modelling', 'Use tables, graphs, and technology to model relationships and compare predictions.'),
                sm_curriculum_topic('Interpreting rates of change', 'Analyze slope, intercepts, and changing quantities in data-rich situations.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Trigonometry and right triangles', 'Use sine, cosine, tangent, and angle relationships to solve measurement problems.'),
                sm_curriculum_topic('Coordinate geometry', 'Apply midpoint, distance, slope, and line equations to geometric problems.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Income, deductions, and purchasing decisions', 'Use percentages and rates to analyze earnings, deductions, taxes, tips, and discounts.'),
                sm_curriculum_topic('Linear and quadratic financial models', 'Model simple cost, revenue, break-even, and growth situations with equations and graphs.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 11',
        'focus' => 'Support university, college, and mixed pathways through functions, trigonometry, statistics, measurement, and finance.',
        'source' => [
            'label' => 'Ontario Secondary Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/secondary-mathematics',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Rational exponents and function notation', 'Use exponent laws, radicals, rational expressions, and function notation across course pathways.'),
                sm_curriculum_topic('Numerical reasoning in applications', 'Estimate, calculate, and interpret results in financial, measurement, and modelling contexts.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Polynomial, rational, exponential, and trigonometric functions', 'Represent, transform, solve, and interpret key families of functions.'),
                sm_curriculum_topic('Equations, identities, and modelling', 'Solve equations and build algebraic models for relationships from tables, graphs, and contexts.'),
            ],
            'Data' => [
                sm_curriculum_topic('Statistics and one-variable data', 'Analyze distributions using measures of centre, spread, and visual displays.'),
                sm_curriculum_topic('Two-variable data and regression', 'Interpret scatter plots, correlation, lines of best fit, and model limitations.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Trigonometric applications', 'Use primary trigonometric ratios, sine law, cosine law, and periodic behaviour to solve problems.'),
                sm_curriculum_topic('Measurement and design', 'Solve area, volume, scale, and optimization problems in applied contexts.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Personal finance and loans', 'Compare simple interest, compound interest, payment plans, loans, and savings options.'),
                sm_curriculum_topic('Financial modelling with functions', 'Model growth, decay, annuities, and cost scenarios using functions and technology.'),
            ],
        ],
    ],
    [
        'grade' => 'Grade 12',
        'focus' => 'Prepare for post-secondary options through advanced functions, calculus, vectors, data management, and financial modelling.',
        'source' => [
            'label' => 'Ontario Secondary Mathematics curriculum',
            'url' => 'https://www.dcp.edu.gov.on.ca/en/curriculum/secondary-mathematics',
        ],
        'strands' => [
            'Number' => [
                sm_curriculum_topic('Advanced number and algebraic fluency', 'Use logarithms, rational expressions, trigonometric values, and exact forms in advanced problem solving.'),
                sm_curriculum_topic('Rates of change and limits', 'Interpret average and instantaneous rates of change as preparation for calculus.'),
            ],
            'Algebra' => [
                sm_curriculum_topic('Advanced functions', 'Analyze polynomial, rational, exponential, logarithmic, and trigonometric functions and transformations.'),
                sm_curriculum_topic('Calculus-ready modelling', 'Solve equations, inequalities, and optimization problems using algebraic and graphical methods.'),
            ],
            'Data' => [
                sm_curriculum_topic('Probability distributions and statistics', 'Analyze probability, counting, distributions, normal models, and statistical summaries.'),
                sm_curriculum_topic('Data management and inference', 'Design studies, interpret data, and evaluate claims using statistical reasoning.'),
            ],
            'Spatial Sense' => [
                sm_curriculum_topic('Vectors and three-dimensional geometry', 'Represent vectors, lines, planes, intersections, and spatial relationships algebraically and geometrically.'),
                sm_curriculum_topic('Calculus in geometric contexts', 'Use derivatives to analyze motion, curves, optimization, and related geometric problems.'),
            ],
            'Financial Literacy' => [
                sm_curriculum_topic('Annuities, mortgages, and investments', 'Model long-term savings, loans, mortgages, interest, and investment growth.'),
                sm_curriculum_topic('Post-secondary financial planning', 'Compare tuition, scholarships, employment, savings plans, and repayment scenarios.'),
            ],
        ],
    ],
];

foreach ($curriculumRoadmap as &$grade) {
    $resourceSetName = sm_curriculum_resource_set($grade['grade']);

    foreach ($grade['strands'] as $strandName => &$topics) {
        $resources = $curriculumResourceSets[$resourceSetName][$strandName] ?? null;

        if ($resources === null) {
            continue;
        }

        foreach ($topics as &$topic) {
            $topic['textbook_link'] = $resources['textbook_link'];
            $topic['extra_practice_link'] = $resources['extra_practice_link'];
        }

        unset($topic);
    }

    unset($topics);
}

unset($grade);
?>
