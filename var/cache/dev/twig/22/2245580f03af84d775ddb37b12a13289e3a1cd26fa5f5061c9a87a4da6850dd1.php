<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c352ead0b22f19a65079946f52d7c7c51cdb79d9a171f54de10e4e5c79e6f373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35b9608ad471408f922dface572c9d82f890a07fa664b2f115050afd5f0d6bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b9608ad471408f922dface572c9d82f890a07fa664b2f115050afd5f0d6bb0->enter($__internal_35b9608ad471408f922dface572c9d82f890a07fa664b2f115050afd5f0d6bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cfadb2994ae6476e11f841086e7ebafbde9ed84f3c511ef08bc549154dcfd639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfadb2994ae6476e11f841086e7ebafbde9ed84f3c511ef08bc549154dcfd639->enter($__internal_cfadb2994ae6476e11f841086e7ebafbde9ed84f3c511ef08bc549154dcfd639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b9608ad471408f922dface572c9d82f890a07fa664b2f115050afd5f0d6bb0->leave($__internal_35b9608ad471408f922dface572c9d82f890a07fa664b2f115050afd5f0d6bb0_prof);

        
        $__internal_cfadb2994ae6476e11f841086e7ebafbde9ed84f3c511ef08bc549154dcfd639->leave($__internal_cfadb2994ae6476e11f841086e7ebafbde9ed84f3c511ef08bc549154dcfd639_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a068de8d340ec9645859c803825f0dfe44e75792bc092050e56d7be77ef29f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a068de8d340ec9645859c803825f0dfe44e75792bc092050e56d7be77ef29f1->enter($__internal_1a068de8d340ec9645859c803825f0dfe44e75792bc092050e56d7be77ef29f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8499db6c542c6f7cb1fa5e6bba2800846bf40d2cdc4b8ace620c16387ef689b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8499db6c542c6f7cb1fa5e6bba2800846bf40d2cdc4b8ace620c16387ef689b->enter($__internal_b8499db6c542c6f7cb1fa5e6bba2800846bf40d2cdc4b8ace620c16387ef689b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b8499db6c542c6f7cb1fa5e6bba2800846bf40d2cdc4b8ace620c16387ef689b->leave($__internal_b8499db6c542c6f7cb1fa5e6bba2800846bf40d2cdc4b8ace620c16387ef689b_prof);

        
        $__internal_1a068de8d340ec9645859c803825f0dfe44e75792bc092050e56d7be77ef29f1->leave($__internal_1a068de8d340ec9645859c803825f0dfe44e75792bc092050e56d7be77ef29f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_58b6929e437da20602fc9e113632e0f6635ba79449682c43309b986c4623bcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b6929e437da20602fc9e113632e0f6635ba79449682c43309b986c4623bcdd->enter($__internal_58b6929e437da20602fc9e113632e0f6635ba79449682c43309b986c4623bcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3e1d561f6d7f81821ad2b37a3d6b7dd7b944753354e234ef69153ab92a7158a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e1d561f6d7f81821ad2b37a3d6b7dd7b944753354e234ef69153ab92a7158a->enter($__internal_b3e1d561f6d7f81821ad2b37a3d6b7dd7b944753354e234ef69153ab92a7158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b3e1d561f6d7f81821ad2b37a3d6b7dd7b944753354e234ef69153ab92a7158a->leave($__internal_b3e1d561f6d7f81821ad2b37a3d6b7dd7b944753354e234ef69153ab92a7158a_prof);

        
        $__internal_58b6929e437da20602fc9e113632e0f6635ba79449682c43309b986c4623bcdd->leave($__internal_58b6929e437da20602fc9e113632e0f6635ba79449682c43309b986c4623bcdd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
