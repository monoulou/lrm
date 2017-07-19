<?php

/* @MAUser/Resetting/reset.html.twig */
class __TwigTemplate_318f9126566ec71d7411730bd736f1d1684265f73bc6134d83a7c77a4453bae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/reset.html.twig", 1);
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
        $__internal_40f88b532ecefdb075408e411fde32baadbbf2f5faa1db247ae3a187ea5bb910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f88b532ecefdb075408e411fde32baadbbf2f5faa1db247ae3a187ea5bb910->enter($__internal_40f88b532ecefdb075408e411fde32baadbbf2f5faa1db247ae3a187ea5bb910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset.html.twig"));

        $__internal_3c668223f508ef70f34de066326e55b020a6a7c90af14cec44c28dcdbc60e14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c668223f508ef70f34de066326e55b020a6a7c90af14cec44c28dcdbc60e14d->enter($__internal_3c668223f508ef70f34de066326e55b020a6a7c90af14cec44c28dcdbc60e14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f88b532ecefdb075408e411fde32baadbbf2f5faa1db247ae3a187ea5bb910->leave($__internal_40f88b532ecefdb075408e411fde32baadbbf2f5faa1db247ae3a187ea5bb910_prof);

        
        $__internal_3c668223f508ef70f34de066326e55b020a6a7c90af14cec44c28dcdbc60e14d->leave($__internal_3c668223f508ef70f34de066326e55b020a6a7c90af14cec44c28dcdbc60e14d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0875c6d7adc5287e5282af7afb47f59c070f93ceb69d2939b90b3fd054bde4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0875c6d7adc5287e5282af7afb47f59c070f93ceb69d2939b90b3fd054bde4f->enter($__internal_a0875c6d7adc5287e5282af7afb47f59c070f93ceb69d2939b90b3fd054bde4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e77b0b6afcea085db5ff3bd72bc254ee95041141f2d11fba9949b82f49027890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77b0b6afcea085db5ff3bd72bc254ee95041141f2d11fba9949b82f49027890->enter($__internal_e77b0b6afcea085db5ff3bd72bc254ee95041141f2d11fba9949b82f49027890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@MAUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e77b0b6afcea085db5ff3bd72bc254ee95041141f2d11fba9949b82f49027890->leave($__internal_e77b0b6afcea085db5ff3bd72bc254ee95041141f2d11fba9949b82f49027890_prof);

        
        $__internal_a0875c6d7adc5287e5282af7afb47f59c070f93ceb69d2939b90b3fd054bde4f->leave($__internal_a0875c6d7adc5287e5282af7afb47f59c070f93ceb69d2939b90b3fd054bde4f_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/reset.html.twig";
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
    {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
