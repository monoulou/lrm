<?php

/* @MAUser/Profile/show.html.twig */
class __TwigTemplate_d4a7fb9d8ebb6360c4e1b25baa71299f1ae5aea4f8bd925a255fbce83c062e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0b8cd659f409546fa545488555752e1b4233f13ce45413575b2a112a40ba397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b8cd659f409546fa545488555752e1b4233f13ce45413575b2a112a40ba397->enter($__internal_b0b8cd659f409546fa545488555752e1b4233f13ce45413575b2a112a40ba397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show.html.twig"));

        $__internal_d3db0f9ca1a2dda2757549e1b1b8bcceae53e1882b54987149dba11872a2c3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3db0f9ca1a2dda2757549e1b1b8bcceae53e1882b54987149dba11872a2c3b0->enter($__internal_d3db0f9ca1a2dda2757549e1b1b8bcceae53e1882b54987149dba11872a2c3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b8cd659f409546fa545488555752e1b4233f13ce45413575b2a112a40ba397->leave($__internal_b0b8cd659f409546fa545488555752e1b4233f13ce45413575b2a112a40ba397_prof);

        
        $__internal_d3db0f9ca1a2dda2757549e1b1b8bcceae53e1882b54987149dba11872a2c3b0->leave($__internal_d3db0f9ca1a2dda2757549e1b1b8bcceae53e1882b54987149dba11872a2c3b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_626dd598d33b6af2c450679b45e2327fdf419c1ff3ba137f92dd714c34f3362b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626dd598d33b6af2c450679b45e2327fdf419c1ff3ba137f92dd714c34f3362b->enter($__internal_626dd598d33b6af2c450679b45e2327fdf419c1ff3ba137f92dd714c34f3362b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7689b9ddf9de32568bb1b10637ee3833703f17186cc023f9912522c37fdf86aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7689b9ddf9de32568bb1b10637ee3833703f17186cc023f9912522c37fdf86aa->enter($__internal_7689b9ddf9de32568bb1b10637ee3833703f17186cc023f9912522c37fdf86aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@MAUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_7689b9ddf9de32568bb1b10637ee3833703f17186cc023f9912522c37fdf86aa->leave($__internal_7689b9ddf9de32568bb1b10637ee3833703f17186cc023f9912522c37fdf86aa_prof);

        
        $__internal_626dd598d33b6af2c450679b45e2327fdf419c1ff3ba137f92dd714c34f3362b->leave($__internal_626dd598d33b6af2c450679b45e2327fdf419c1ff3ba137f92dd714c34f3362b_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Profile/show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
