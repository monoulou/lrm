<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1c2f8190260cd17cc30d10fe33ba5ec15b51646f6c6eb7e5debc3dde14977ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5cab9e0581ea58668b56343ede72a6896469b810053d423ed09c7fd533d61c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cab9e0581ea58668b56343ede72a6896469b810053d423ed09c7fd533d61c52->enter($__internal_5cab9e0581ea58668b56343ede72a6896469b810053d423ed09c7fd533d61c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_cc3ef1c1f41300c35c65a1333432dde65945d8e13231507814bd4c15f24d4aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3ef1c1f41300c35c65a1333432dde65945d8e13231507814bd4c15f24d4aad->enter($__internal_cc3ef1c1f41300c35c65a1333432dde65945d8e13231507814bd4c15f24d4aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cab9e0581ea58668b56343ede72a6896469b810053d423ed09c7fd533d61c52->leave($__internal_5cab9e0581ea58668b56343ede72a6896469b810053d423ed09c7fd533d61c52_prof);

        
        $__internal_cc3ef1c1f41300c35c65a1333432dde65945d8e13231507814bd4c15f24d4aad->leave($__internal_cc3ef1c1f41300c35c65a1333432dde65945d8e13231507814bd4c15f24d4aad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d01986c890de4ca9f8998567fb148b0c3a596369635fdf40d63f50a9456f7fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01986c890de4ca9f8998567fb148b0c3a596369635fdf40d63f50a9456f7fb3->enter($__internal_d01986c890de4ca9f8998567fb148b0c3a596369635fdf40d63f50a9456f7fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_839872f3a9540473dad37ea0b83519722c47fd16c0409b184204e05ca147f391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839872f3a9540473dad37ea0b83519722c47fd16c0409b184204e05ca147f391->enter($__internal_839872f3a9540473dad37ea0b83519722c47fd16c0409b184204e05ca147f391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_839872f3a9540473dad37ea0b83519722c47fd16c0409b184204e05ca147f391->leave($__internal_839872f3a9540473dad37ea0b83519722c47fd16c0409b184204e05ca147f391_prof);

        
        $__internal_d01986c890de4ca9f8998567fb148b0c3a596369635fdf40d63f50a9456f7fb3->leave($__internal_d01986c890de4ca9f8998567fb148b0c3a596369635fdf40d63f50a9456f7fb3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
