<?php

/* item.html.twig */
class __TwigTemplate_372d4d8e9e80e0c5e681098f3b95fedafce225193a3eb8d2951f35f41d97a562 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item.html.twig"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 new\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 6, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->source); })()), "url", array()), "html", null, true);
        echo "\">(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->source); })()), "host", array()), "html", null, true);
        echo ")</a>
            <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->source); })()), "score", array()), "html", null, true);
        echo " points by ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->source); })()), "by", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->source); })()), "time", array()), "m/d/Y"), "html", null, true);
        echo " 
                | ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->source); })()), "descendants", array()), "html", null, true);
        echo " comments</p>
        </div>
        ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            echo "        <ul class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 14
                echo "                <li>
                    <p class=\"comment\">By ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "by", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "time", array()), "m/d/Y"), "html", null, true);
                echo "</p> 
                    ";
                // line 17
                echo "                        ";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "text", array());
                echo " ";
                // line 18
                echo "                    ";
                // line 19
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
        ";
        }
        // line 23
        echo "    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 23,  111 => 21,  104 => 19,  102 => 18,  98 => 17,  92 => 15,  89 => 14,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  67 => 8,  61 => 7,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 new\">
            <h1>{{ data.title }}</h1>
            <a href=\"{{ data.url }}\">({{ data.host }})</a>
            <p>{{ data.score }} points by {{ data.by }} {{ data.time |date(\"m/d/Y\") }} 
                | {{ data.descendants }} comments</p>
        </div>
        {% if comments | length > 0 %}
        <ul class=\"col-12 col-sm-12 col-md-12 col-lg-12\">
            {% for comment in comments %}
                <li>
                    <p class=\"comment\">By {{ comment.by }} {{ comment.time |date(\"m/d/Y\") }}</p> 
                    {% autoescape %}
                        {{ comment.text | raw }} {# var won't be escaped #}
                    {% endautoescape %}
                </li>
            {% endfor %}
        </ul>
        {% endif %}
    </div>
{% endblock %}

{#
  \"by\" : \"gbacon\",
  \"id\" : 16842392,
  \"kids\" : [ 16842699, 16842457 ],
  \"parent\" : 16841449,
  \"text\" : \"<i>In an opinion piece for The Daily Caller and on his site, Rep. Peter Roskam, R-Ill., said “making the tax collector also the tax preparer creates an inherent conflict of interest while forcing citizens to relinquish control of their taxes to the government.”</i><p>The government already controls taxes and thus citizens’ incomes. In a time when so many are worried about privacy, few voice any concern about the enormous privacy problems inherent in the forced full disclosure of the intimate details of one’s financial affairs.<p>Fiscal year 2019 is forecast to have federal revenue of \$3.422 trillion[0], of which \$1.688 trillion will be from individual income taxes. That means repealing the income tax and replacing it with nothing would take the federal budget not back to the founding era or even the nineteenth century but to the Clinton years[1].<p>[0]: <a href=\\\"https:&#x2F;&#x2F;www.thebalance.com&#x2F;current-u-s-federal-government-tax-revenue-3305762\\\" rel=\\\"nofollow\\\">https:&#x2F;&#x2F;www.thebalance.com&#x2F;current-u-s-federal-government-ta...</a><p>[1]: <a href=\\\"http:&#x2F;&#x2F;www.taxpolicycenter.org&#x2F;statistics&#x2F;federal-receipt-and-outlay-summary\\\" rel=\\\"nofollow\\\">http:&#x2F;&#x2F;www.taxpolicycenter.org&#x2F;statistics&#x2F;federal-receipt-an...</a>\",
  \"time\" : 1523795561,
  \"type\" : \"comment\"
#}", "item.html.twig", "/Users/mariaguija/Sites/nano-blog/eigensonne/templates/item.html.twig");
    }
}
